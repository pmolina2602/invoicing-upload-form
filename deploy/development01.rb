set :new_relic_api_key, "5d8f94681bbf1bf489b9d75b90d56fb5db18d7b3"
set :new_relic_app_name, "shop-sync01"

server 'worker01.linio-development.com', user: 'shop-sync', roles: %w{worker}
