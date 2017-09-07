################################################################
# Dockerfile that provides the image for Drupal:7 Bech
################################################################

##### Requirements ######
### html.zip
### Drupal Mysql DB previously installed
### Grant for establish connection: GRANT ALL ON *.* to root@'172.17.0.4' IDENTIFIED BY 'admin';
#########################

### ADMINISTRATIVE USER ###
### admin / admin       ###

######## MAINTAINER ############
#MAINTAINER "Cristiano Reame" "c.reame@accenture.com"

############# BASE #############
FROM drupal:7


######### ENVIRONMENT ##########
#Drupal Container

######### CONFIG FILES #########
#Add installed modules to Drupal installation
#Review /sites/default/settings.php for the MySql connect string
RUN mv /var/www/html /var/www/html_bkp
RUN mkdir html
RUN chmod 766 html
ADD . /var/www/html

############ NETWORK ###########
#Container port to be available. Should be mapped while starting the container

EXPOSE 80

### PERMISOS ###
#USER root
#CMD chmod 766 /var/www/html/sites/default -R
#CMD chmod 766 /var/www/html/modules -R
#CMD chmod 766 /var/www/html/profiles -R
#CMD chmod 766 /var/www/html/themes -R
#CMD chmod 766 /var/www/html/core -R

