@servers(['production' => ''])

@setup
$user = '';
$domain = '';
$repository = '';
@endsetup

@task('clone', ['on' => 'production'])
  cd /home/{{$user}}/web/{{$domain}}/public_html/
  rm index.html
  rm robots.txt
  git clone {{$repository}} .
  cp .env-example .env
  composer install
@endtask

@task('deploy', ['on' => 'production'])
  cd /home/{{$user}}/web/{{$domain}}/public_html/
  git checkout -f master
  git pull
  composer install
@endtask




