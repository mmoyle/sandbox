 FRUIT[0]=apple
 FRUIT[1]=banana
 FRUIT[2]=orange

echo "Fruits:"
 echo $FRUIT
 echo ${FRUIT[1]}
 echo ${FRUIT[2]}

 BAND=('john lennon' 'paul McCartney' 'george harrison' 'ringo starr')
echo ""
echo "Beatles:"
 echo ${BAND[0]}
 echo ${BAND[1]}
 echo ${BAND[2]}
 echo ${BAND[3]}

echo ${BAND[*]}

# quoted form only 4 items
echo ${BAND[@]}

unset FRUIT
echo ${FRUIT[@]}



