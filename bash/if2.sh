#!/bin/bash
if [[  ${LOCALE} != 'en_US' ]]; then
     echo ${LOCALE}
fi 

EBS_ENV=kizna-server-qa01
if [[ ${EBS_ENV} == "kizna-server-qa-gold" ]]
then
  echo "kizna-server-qa-gold"
  echo ${EBS_ENV}
	MEMCACHE_HOST=mem.gxre62.cfg.euw1.cache.amazonaws.com
elif [[ ${EBS_ENV} == "kizna-server-qa01" ]]
then
  echo "kizna-server-qa01"
  echo ${EBS_ENV}
	MEMCACHE_HOST=test-node-qa01
fi


echo ${MEMCACHE_HOST} 11211
