#!/bin/bash

# udpate path if bin folder exists in HOME
if [ -d $HOME/bin ] ; then 
#	PATH=$PATH:$HOME/bin
	echo $HOME/bin
fi 

echo Path is $PATH


# test for Zero length variable
# variable must be quoted as the shell will not quote the null value of an unset variable
# though maybe it does in bash 3.2.57 
if [ -z "$FRUIT_BASKET" ]; then
	echo "Your fruit basket is empty";
else
	echo "Your fruit basket contains the following fruit $FRUIT_BASKET"
fi

FRUIT=apple
if [ "$FRUIT" == apple ]; then 
	echo "An apple a day keeps the doctor away."
else
	echo "Your fruit is not an apple"
fi


if [ $? -ne 0 ]; then
	echo "An error was encountered."
	exist
fi
echo " \$? stores error as non zero value. Command was successful"

