## Spiral Boilerplate
Author: Felipe Gonzalez Lopez felipe@amsterdapp.nl <br>
https://github.com/felipegon-dev/spiral-ddd-bolierplate

### Contents
* Spiral framework with http
* DDD model validated by deptrac tool
* Quality tools installed: rector, deptrac, psalm, phpcs
* Tests: phpunit
* Service running with Tilt, docker and php8.1

### How to install
Install Tilt.dev
```
sudo curl -fsSL https://raw.githubusercontent.com/tilt-dev/tilt/master/scripts/install.sh | bash
```
* Install or upgrade docker-compose to >=v1.28.3+ (locally)
```
sudo curl -L "https://github.com/docker/compose/releases/download/1.28.5/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
chmod +x /usr/local/bin/docker-compose
```
Clone the repo
```
git clone https://github.com/felipegon-dev/spiral-ddd-bolierplate
```


### Configuration:
Edit docker/Dockerfile and set your local user id: YOUR_LOCAL_USER_ID if not 
you will have problems with docker permissions when tilt creates files

### How to run
```
tilt up
```
To stop:
```
tilt down
```

        