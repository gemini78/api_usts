# Geolocalisation
## The goal of this project is to develop an Android / iOS application allowing users to see themselves in real time on a map via the geolocation of the device.

## Get and install the application

- git clone git@github.com:gemini78/api_usts.git
- move to the folder
- composer install
- symfony console doctrine:database:create
- symfony console doctrine:migrations:migrate
- (optional) symfony console doctrine:fixtures:load --no-interaction

## Execution 

 - symfony serve