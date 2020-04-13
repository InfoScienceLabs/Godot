data_path="/home/client/data/$(dig +short myip.opendns.com @resolver1.opendns.com)"
#echo $data_path
mkdir -p  $data_path
cd /home/client/workspace
#pwd
python client.py

