# mcjsonapi.com

This is to be used with dokku. It will deploy to a docker container and download [the latest version of the website from CI](https://ci.alecgorge.com/job/JSONAPI/lastSuccessfulBuild/artifact/site/mcjsonapi.com.tar.gz) and run it as a static site using the nginx buildpack.
