#!/bin/sh
echo "Print LOCALE unless its en_US"
if [[  ${LOCALE} != 'en_US' ]]; then
     echo ${LOCALE}
fi 

