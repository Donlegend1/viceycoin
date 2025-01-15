import React from "react";
import Particles from "react-tsparticles";
import { loadFull } from "tsparticles";

export default function StarryBackground() {
  const particlesInit = async (main) => {
    // Load the tsparticles bundle
    await loadFull(main);
  };

  const particlesOptions = {
    background: {
      color: {
        value: "#000000", // Background color
      },
    },
    fpsLimit: 60,
    particles: {
      number: {
        value: 100, // Number of stars
        density: {
          enable: true,
          value_area: 800, // Adjust density
        },
      },
      color: {
        value: "#ffffff", // Star color
      },
      shape: {
        type: "circle", // Star shape
      },
      opacity: {
        value: 0.8, // Star opacity
        random: true,
      },
      size: {
        value: 2, // Star size
        random: true,
      },
      move: {
        enable: true,
        speed: 1, // Speed of movement
        direction: "none", // Random direction
        random: false,
        straight: false,
        outModes: {
          default: "out", // Stars leave the canvas and reappear
        },
      },
    },
    interactivity: {
      events: {
        onHover: {
          enable: true,
          mode: "repulse", // Repel particles on hover
        },
        onClick: {
          enable: true,
          mode: "push", // Add more particles on click
        },
      },
      modes: {
        repulse: {
          distance: 100, // Repulse distance
          duration: 0.4,
        },
        push: {
          quantity: 4, // Number of stars added on click
        },
      },
    },
  };

  return (
    <Particles id="tsparticles" init={particlesInit} options={particlesOptions} />
  );
}
