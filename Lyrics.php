<?php
// Manjot Chamdal WD-201
//  String Variables 
$song_title = "Skyfall";
$artist_name = "Adele";  
$mood = "dramatic";      
 
$action_main = "Let the sky fall";
$action_stand = "We will stand tall";
$action_face = "Face it all together";
$location_ref = "at Skyfall";
 
// Numeric Variables 
$num_ten = 10;
$num_thousand = 1000;
 
$dramatic_count = $num_ten + $num_ten;
 
// Array (Chosen Nouns) 
$lyric_nouns = [
    "body" => "heart",
    "place" => "Earth",
    "threat" => "harm",
    "emotion" => "end",
    "secret" => "number"
];
 
// Indexed Array (Chosen Verbs/Adjectives)
$lyric_verbs_adj = [
    "drowned",
    "dreamt",
    "swept",
    "stolen",
    "waiting"
];
 

// We count the elements in the arrays, then use the + operator.
$noun_count = count($lyric_nouns); 
$verb_count = count($lyric_verbs_adj); 
$total_word_count = $noun_count + $verb_count; 
 
// Array of Song Sections
$song_sections = [
    "V1" => [
        "This is the {$lyric_nouns['emotion']}",
        "Hold your breath and count to $num_ten",
        "Feel the {$lyric_nouns['place']} move and then",
        "Hear my {$lyric_nouns['body']} burst again"
    ],
    "V2" => [
        "$song_title is where we start",
        "A $num_thousand miles and poles apart",
        "Where worlds collide and days are dark",
        "We are {$dramatic_count} seconds from the light"
    ],
    "Bridge" => [
        "It's over, and I'm {$lyric_verbs_adj[4]} for my moment",
        "I've got the whole wide world in the palm of my hand",
        "You can take my {$lyric_nouns['secret']}, but you'll never take my soul"
    ]
];
 
// chorus 
function print_chorus($act1, $act2, $act3, $loc) {
    echo "<p class='chorus'>";
    echo "$act1 when it crumbles <br>";
    echo "$act2 and when it crumbles <br>";
    echo "$act3 as it crumbles <br>";
    echo "This is the sound " . $loc;
    echo "</p>";
}
 
// Juggling
 
// Example 1: Implicit Juggling (Division /)
$juggle_divisor = "200"; 
$juggle_result_1 = $num_thousand / $juggle_divisor; 
 
// Example 2: Explicit Juggling (Cast to float)
$juggle_string_prefix = "Risk Factor: ";
$juggle_numeric_base = $num_ten;
$juggle_full_string = $juggle_string_prefix . $juggle_numeric_base;
 
function calculate_dramatic_risk($base_num) {
    $risk_value = (float)$base_num; // Explicit cast to float
    return $risk_value;
}
$risk_factor_value = calculate_dramatic_risk($num_ten);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $song_title . " - " . $artist_name; ?></title>
<style>
    body { font-family: sans-serif; background: #001f3f; color: #fff; max-width: 700px; margin: auto; padding: 20px;}
    h1, h2, h3 { color: #f9e207; border-bottom: 1px solid #333; padding-bottom: 5px; }
    .chorus { color: #87ceeb; font-weight: bold; margin: 10px 0; padding: 10px; border-left: 5px solid #87ceeb; }
    .verse-line { margin: 5px 0; }
    .data-box { background: #333; padding: 15px; border-radius: 5px; margin-bottom: 20px; font-size: 0.9em; }
    .data-box h4 { margin-top: 0; color: #f9e207; }
</style>
</head>
<body>
    <h1><?php echo $song_title; ?></h1>
    <h2>Artist: <?php echo $artist_name; ?></h2>
    <p>Mood: <?php echo $mood; ?></p>
    <hr>
    
    <h2>The Complete Song Lyrics</h2>
 
    <h3>Verse 1</h3>
    <?php
    foreach ($song_sections['V1'] as $line) {
        echo "<p class='verse-line'>$line</p>";
    }
    ?>
    <p class="verse-line">I've <?php echo $lyric_verbs_adj[0]; ?> and dreamt away this {$lyric_nouns['threat']}.</p>
    <p class="verse-line">I owe them. I am being <?php echo $lyric_verbs_adj[2]; ?> by this moment.</p>
 
    <h3>Chorus</h3>
    <?php
    print_chorus($action_main, $action_stand, $action_face, $location_ref);
    ?>
 
    <h3>Verse 2</h3>
    <?php
    foreach ($song_sections['V2'] as $line) {
        echo "<p class='verse-line'>$line</p>";
    }
    echo "<p class='verse-line'>You may have my " . $lyric_nouns['secret'] . ", but you'll never have my " . $lyric_nouns['body'] . ".</p>";
    ?>
 
    <h3>Chorus (Reprise)</h3>
    <?php
    print_chorus($action_main, $action_stand, $action_face, $location_ref);
    ?>
 
    <h3>Bridge</h3>
    <?php
    foreach ($song_sections['Bridge'] as $line) {
        echo "<p class='verse-line'>$line</p>";
    }
    
    echo "<p class='verse-line'>This song uses **{$total_word_count}** core nouns and verbs.</p>";
    ?>
    <hr>
    
    <h2>Technical Requirements Display</h2>
 
    <div class="data-box">
        <h4>Array Counts </h4>
        <p>Total Nouns: **<?php echo $noun_count; ?></p>
        <p>Total Verbs/Adjectives: **<?php echo $verb_count; ?></p>
        <p>Total Combined Word Count in Lyrics: **<?php echo $total_word_count; ?> (Used in Bridge)</p>
        
        <h4>Type Juggling in Action: Example 1 (Implicit)</h4>
        <p>Dividing **<?php echo $num_thousand; ?><?php echo $juggle_result_1; ?>**</p>
        
        <h4>Type Juggling in Action: Example 2 (Explicit)</h4>
        <p>Explicitly casting the integer **<?php echo $num_ten; ?>  <?php echo $risk_factor_value; ?>**</p>
    </div>
 
    <div class="data-box">
        <h4>Array Contents: Nouns & Verbs/Adjectives</h4>
        
        <p><strong>Nouns Used:</strong>
        <?php echo implode(", ", array_values($lyric_nouns)); ?>
        </p>
        
        <p><strong>Verbs/Adjectives Used:</strong>
        <?php echo implode(", ", $lyric_verbs_adj); ?>
        </p>
    </div>
</body>
</html>