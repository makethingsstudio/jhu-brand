set :rails_env, :dev

set :branch, fetch(:branch, "dist")
set :env, fetch(:env, :rails_env)

set :domain, 'ftp.make-things.com'
set :user, 'makethingsstudio'
set :port, 22

set :default_server, domain
set :dest_server, ENV['SERVER'] || default_server

role  :app, dest_server
role  :web, dest_server
role  :db,  dest_server, :primary => true

set :keep_releases, 3

set(:deploy_to) {"/home/makethingsstudio/hosts/clients.make-things.com/#{project_id}/#{rails_env}/"}


#after 'deploy:create_symlink', 'app:robots'
