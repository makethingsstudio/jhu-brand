# Project Details
set :project_id, "p0270"
set :application, "identity.jhu.edu"
set :repository,  "git@bitbucket.org:benkutil/p0270-jhu-identity-site.git"

# Set Stages
set :stages, %w(dev staging production)

# Deploy Details
set :deploy_via, :remote_cache
set :copy_cache, true
set :copy_exclude, ['.git']

# SSH
set :ssh_options, {:forward_agent => true}

#Global Config
default_run_options[:pty] = true
set :keep_releases, 3
set :use_sudo, false
