if [[ $EBS_ENV == 'kizna-server-qa-gold' ]]; then
  echo ASSETS_DOMAIN=s3-eu-west-1.amazonaws.com/kizna-qa-gold-assets > env.properties
elif [[ $EBS_ENV == 'kizna-server-qa01' ]]; then
  echo ASSETS_DOMAIN=s3-eu-west-1.amazonaws.com/kizna-qa01-assets > env.properties
elif [[ $EBS_ENV == 'kizna-server-qa02' ]]; then
  echo ASSETS_DOMAIN=s3-eu-west-1.amazonaws.com/kizna-qa02-assets > env.properties
fi
