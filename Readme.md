Before editing, run   
`npm install -i`  
then run   
`npx tailwindcss -i ./src/input.css -o ./src/output.css --watch`
and to build docker image run  
`docker build -t 'fmix-web' .`  
to run docker container run  
`docker run -d -p 5000:80 --name 'fmix-web' 'fmix-web'`  
to stop docker container run  
`docker stop 'fmix-web'`  
to remove container run  
`docker rm 'fmix-web'`