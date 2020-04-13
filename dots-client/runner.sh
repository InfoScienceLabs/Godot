data_path="/home/client/data/$(dig +short myip.opendns.com @resolver1.opendns.com)"
#echo $data_path
mkdir -p  $data_path
cd /home/client/workspace


inotifywait -m $data_path -e close_write  |
    while read path action file; do
	# echo "The file '$file' appeared in directory '$path' via '$action'"
    #sync the files to server
	rsync -qcr --log-file=sync-runner.log  $data_path user@server_ip:/home/server/data
    done



