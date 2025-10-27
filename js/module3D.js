import * as THREE from "https://cdn.skypack.dev/three@0.129.0/build/three.module.js";

import { GLTFLoader } from "https://cdn.skypack.dev/three@0.129.0/examples/jsm/loaders/GLTFLoader.js";

const scene = new THREE.Scene();

const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);

camera.position.z = 500;

let mouseX = window.innerWidth / 2;

let mouseY = window.innerHeight / 2;

let object;

const renderer = new THREE.WebGLRenderer({ alpha: true });

renderer.setSize(window.innerWidth, window.innerHeight);

document.getElementById("container3D").appendChild(renderer.domElement);

const loader = new GLTFLoader();

loader.load(

  "https://www.premiumdelevent.com/wp-content/uploads/2025/01/hello.glb", // NO funciona => https://www.premiumdelevent.com/wp-content/uploads/2025/01/Sillon1.gltf falta scene.bin

  function (gltf) {

    object = gltf.scene;

    const scaleFactor = 5; 

    object.scale.set(scaleFactor, scaleFactor, scaleFactor);

    scene.add(object);

  },

  undefined,

  function (error) {

    console.error(error);

  }

);

const topLight = new THREE.DirectionalLight(0xffffff, 1);

topLight.position.set(500, 500, 1000);

scene.add(topLight);

const ambientLight = new THREE.AmbientLight(0x333333, 1);

scene.add(ambientLight);

function animate() {

  requestAnimationFrame(animate);

  if (object) {

    object.rotation.y = -3 + (mouseX / window.innerWidth) * 3;

    object.rotation.x = -1.2 + (mouseY * 2.5) / window.innerHeight;

  }

  renderer.render(scene, camera);

}

window.addEventListener("resize", () => {

  camera.aspect = window.innerWidth / window.innerHeight;

  camera.updateProjectionMatrix();

  renderer.setSize(window.innerWidth, window.innerHeight);

});

document.onmousemove = (e) => {

  mouseX = e.clientX;

  mouseY = e.clientY;

};

animate();