# Project Details
set :project_id, "p0270"
set :application, "identity.jhu.edu"
set :repository,  "git@bitbucket.org:benkutil/p0270-jhu-identity-site.git"

# Set Stages
set :stages, %w(dev staging production)

# Deploy Details
set :deploy_via, :remote_cache
set :copy_cache, true
# set :copy_exclude, ['.git']

# SSH
set :ssh_options, {:forward_agent => true}

#Global Config
default_run_options[:pty] = true
set :keep_releases, 3
set :use_sudo, false


namespace :app  do
  desc 'load submodules from repo'
  task :submodules do
    run "cd #{current_path}; git submodule update --init --recursive -q"
  end
  desc 'symlink folders'
  task :symlink do
    run "ln -sF #{shared_path}/uploads #{current_path}/public/content/"
    run "ln -sF #{shared_path}/config #{current_path}/config"
  end
  desc 'symlink robots'
  task :robots do
    run "if [[ -f #{current_path}/public/robots.txt ]]; then rm #{current_path}/public/robots.txt; fi"
    run "ln -sF #{shared_path}/robots-#{rails_env}.txt #{current_path}/public/robots.txt"
  end
end

after 'deploy:create_symlink', 'app:symlink'
after 'deploy:update', 'deploy:cleanup'
