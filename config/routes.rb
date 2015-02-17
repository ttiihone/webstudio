Rails.application.routes.draw do

  resources :microposts

  resources :users

  get 'static_pages/etusivu'

  get 'static_pages/esittely'

  get 'static_pages/palvelut'

  get 'static_pages/tarjous'

  get 'static_pages/linkit'

  get 'static_pages/info'

  get 'static_pages/galleria'

  # The priority is based upon order of creation: first created -> highest priority.
  # See how all your routes lay out with "rake routes".

  # You can have the root of your site routed with "root"
  root 'static_pages#esittely'

  match '/etusivu',        to: 'static_pages#etusivu',        via: 'get'
  match '/esittely',        to: 'static_pages#esittely',        via: 'get'
  match '/palvelut',     to: 'static_pages#palvelut',     via: 'get'
  match '/info',     to: 'static_pages#info',     via: 'get'
  match '/tarjous',       to: 'static_pages#tarjous',       via: 'get'
  match '/linkit',  to: 'static_pages#linkit',  via: 'get'
  match '/galleria',    to: 'static_pages#galleria',    via: 'get'

  # Example of regular route:
  #   get 'products/:id' => 'catalog#view'

  # Example of named route that can be invoked with purchase_url(id: product.id)
  #   get 'products/:id/purchase' => 'catalog#purchase', as: :purchase

  # Example resource route (maps HTTP verbs to controller actions automatically):
  #   resources :products

  # Example resource route with options:
  #   resources :products do
  #     member do
  #       get 'short'
  #       post 'toggle'
  #     end
  #
  #     collection do
  #       get 'sold'
  #     end
  #   end

  # Example resource route with sub-resources:
  #   resources :products do
  #     resources :comments, :sales
  #     resource :seller
  #   end

  # Example resource route with more complex sub-resources:
  #   resources :products do
  #     resources :comments
  #     resources :sales do
  #       get 'recent', on: :collection
  #     end
  #   end

  # Example resource route with concerns:
  #   concern :toggleable do
  #     post 'toggle'
  #   end
  #   resources :posts, concerns: :toggleable
  #   resources :photos, concerns: :toggleable

  # Example resource route within a namespace:
  #   namespace :admin do
  #     # Directs /admin/products/* to Admin::ProductsController
  #     # (app/controllers/admin/products_controller.rb)
  #     resources :products
  #   end
end
