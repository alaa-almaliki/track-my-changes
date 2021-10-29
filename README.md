# Track my changes

let it do the work for you.

1. copy `file_map.php.sample` to `file_map.php`.
2. set where you want to copy files from and to as key => value respectively in the `file_map.php` file.
3. set cron `crontab -e`
4. add the below
```bash
0 1 * * * /path/to/track-my-changes/track.php # runs 1pm every day
```
5. whenever new entry added to the file_map.php will be automatically picked up and saved in your desired directory.
6. Leave it work for you.