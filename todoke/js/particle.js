particlesJS("particles-js", {
  particles: {
    number: {
      value: 100 /* パーティクルの数 */,
      density: {
        enable: true,
        value_area: 800 /* パーティクルが広がるエリアの大きさ */,
      },
    },
    color: {
      value: "#b95f33" /* パーティクルの色 */,
    },
    shape: {
      type: "circle" /* パーティクルの形 */,
    },
    opacity: {
      value: 0.5 /* パーティクルの透明度 */,
      random: false,
      anim: {
        enable: true,
        speed: 1,
        opacity_min: 0.1,
      },
    },
    size: {
      value: 5 /* パーティクルのサイズ */,
      random: true,
      anim: {
        enable: false,
      },
    },
    line_linked: {
      enable: true,
      distance: 150,
      color: "#b95f33" /* 線の色 */,
      opacity: 0.4,
      width: 1,
    },
    move: {
      enable: true,
      speed: 2,
      direction: "none",
      random: true,
      straight: false,
      out_mode: "out",
      bounce: false,
    },
  },
  interactivity: {
    detect_on: "window",
    events: {
      onhover: {
        enable: true,
        mode: "repulse" /* マウスホバー時に反発 */,
      },
      onclick: {
        enable: true,
        mode: "push" /* クリック時にパーティクルを追加 */,
      },
    },
  },
  retina_detect: true,
});
