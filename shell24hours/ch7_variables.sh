#readonly 

NAME=michael
readonly NAME
NAME=frank

unset NAME
echo $NAME

# local vars 
# only available in current shell session, not in programs called by shell
# environment vars
# available to any child process 
# shell variable 
# special var set by the shell 

# exporting
# sh way
FOO=bar; export FOO
echo $FOO

export NAME FOO

# shell variables
echo PWD: $PWD
echo UID: $UID
echo SHLVL: $SHLVL
echo REPLY: $REPLY
echo RANDOM: $RANDOM
echo SECONDS: $SECONDS
echo IFS: $IFS
echo PATH: $PATH
echo HOME: $HOME
