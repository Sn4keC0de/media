
cp app/src/main.js app/src/main.js.old
r.js -o app/build/app.build.js
mv app/src/main.js.old app/src/main.js

cd dist
#rm -fr build.txt scripts/src/views scripts/src/models scripts/collections scripts/vendor/backbone-amd/docs scripts/vendor/backbone-amd/exampples scripts/vendor/backbone-amd/test scripts/vendor/jquery-mousewheel/test scripts/vendor/requirejs/dist scripts/vendor/requirejs/docs scripts/vendor/requirejs/tests scripts/vendor/threejs/docs scripts/vendor/threejs/editor scripts/vendor/threejs/examples scripts/vendor/threejs/test scripts/vendor/threejs/utils scripts/vendor/threejs/src
