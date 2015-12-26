#!/bin/bash

LOCALE=de_DE

case $LOCALE in
    'en_US' )
        S3_ASSETS=bam-en-prod-assets ;;
    'de_DE' )
        S3_ASSETS=bam-de-prod-assets ;;
esac

echo $S3_ASSETS