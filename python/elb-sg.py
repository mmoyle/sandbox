import os
import sys
import boto3
import argparse
import json
from botocore.exceptions import ClientError

def main():
    parser = argparse.ArgumentParser(
        description='Encrypt unencrypted objects in a bucket.'
    )
    parser.add_argument('--profile', help='AWS profile', default=os.getenv('AWS_PROFILE'))
    parser.add_argument('--region', help="AWS region", default='eu-central-1')
    parser.add_argument('alb_arn', help="Name of ALB")
    parser.add_argument('sg_ids', help="Security Group Ids to add", nargs="+")

    args = parser.parse_args()

    session = boto3.Session(profile_name=args.profile, region_name=args.region)
    elbv2 = session.client('elbv2')
    try:
        response = elbv2.set_security_groups(
            LoadBalancerArn=args.alb_arn,
            SecurityGroups=args.sg_ids
        )

        print(response)
        for id in response['SecurityGroupIds']:
            print (id)
    except ClientError as e:
        print("Client Error Exception:", e)
        exit(1)

if __name__ == "__main__":
    main()
