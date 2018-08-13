<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'TheComicApp');

// Project repository
set('repository', 'git@github.com:morten-lynge/TheComicApp.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', false); 
set('ssh_multiplexing', false);
set('use_relative_symlinks', false);

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server 
add('writable_dirs', []);


// Hosts

host('18.185.103.78')
	->user('deployer')
	->identityFile('~/.ssh/deployerkey')
    ->set('deploy_path', '/var/www/html/TheComicApp');    
    
// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

task('pwd', function () {
    $result = run('pwd');
    writeln("Current dir: $result");
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');

