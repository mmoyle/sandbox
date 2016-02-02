#!/bin/bash

# literal quoting
echo '<-$1250.**>;(update?) [y|n]'

echo '$USER owes $1250.**>; [as of (`date +%m/%d`) ]'

echo "$USER owes $1250.**>; [as of (`date +%m/%d`) ]"
echo "$USER owes \$1250.**>; [as of ($(date +%m/%d))  ]"

# same output
echo "Hello; world"
echo Hel"lo; w"orld 

#vi tip :set list set newline char

# use \ to continue line, will display PS2. can continue typing from there

echo -e "line 1\nline 2"

echo "It's <party> time!"

DEBT=25
echo "$USER owes     \$$DEBT"

