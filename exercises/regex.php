<?php 
//  Alternation: uno o otro
//  pedro|juan
//  Character Sets
//  h[oa]la
//  Wild for Wildcards
//  ....
//  .../. with scape character
//  Ranges
//  [a-c] or [a-z] or [0-9] or [A-Z]
//  Shorthand Character Classes
//  \w: the “word character” class represents the regex range [A-Za-z0-9_]
//  \d: the “digit character” class represents the regex range [0-9]
//  \s: the “whitespace character” class represents the regex range [ \t\r\n\f\v]
//  \W: the “non-word character” class represents the regex range [^A-Za-z0-9_]
//  \D: the “non-digit character” class represents the regex range [^0-9]
//  \S: the “non-whitespace character” class represents the regex range [^ \t\r\n\f\v]
//  Grouping
//  (puppies|kitty cats) are my favorite!
//  quantifiers - fixed
//  \w{3} will match exactly 3 word characters
//  \w{4,7} will match at minimum 4 word characters and at maximum 7 word characters
//  Quantifiers - Optional
//  Optional quantifiers, indicated by the question mark ?, allow us to indicate a character in a regex is optional, or can appear either 0 times or 1 time. 
//  Quantifiers - 0 or More, 1 or More
//  The regex meo*w will match the characters me, followed by 0 or more os, followed by a w. Thus the regex will match mew, meow, meooow, and meoooooooooooow.
//  Another useful quantifier is the Kleene plus, denoted by the plus +, which matches the preceding character 1 or more times.
//  Anchors
//  The regex ^Monkeys: my mortal enemy$ will completely match the text Monkeys: my mortal enemy but not match Spider Monkeys: my mortal enemy in the wild or 
//  Squirrel Monkeys: my mortal enemy in the wild. The ^ ensures that the matched text begins with Monkeys, and the $ ensures the matched text ends with enemy.
?>

