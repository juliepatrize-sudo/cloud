const memberData = {
  charls: {
    name: "Charls Sylwen L. Bernales",
    role: "Project Analyst",
    img: "http://wordpresslaragon.test/wp-content/uploads/2026/11/charls-Photoroom.png",
   
 projects: [
      {
        title: "FinTech Dashboard Redesign",
        date: "2024 - Present",
        desc: "Led the complete overhaul of a banking dashboard, increasing user retention by 35% through improved UX and intuitive data visualization."
      },
      {
        title: "E-Commerce Platform Launch",
        date: "2023",
        desc: "Managed the roadmap and cross-functional team for a new e-commerce platform, shipping on time and under budget."
      },
      {
        title: "Internal Team Wiki",
        date: "2023",
        desc: "Built a centralized knowledge base to improve onboarding and documentation processes for remote team members."
      }
    ]
  },

  jerwin: {
    name: "Jerwin",
    role: "Programmer",
    img: "http://wordpresslaragon.test/wp-content/uploads/2026/11/jerwin.jpg",
    projects: [
      {
        title: "Interactive Portfolio Website",
        date: "2024",
        desc: "Built a highly interactive and accessible portfolio using HTML, CSS, and vanilla JavaScript with smooth animations."
      },
      {
        title: "SaaS Landing Page",
        date: "2023",
        desc: "Developed a responsive, pixel-perfect landing page for a SaaS startup, achieving a 99 Lighthouse performance score."
      },
      {
        title: "React Component Library",
        date: "2023",
        desc: "Created and maintained a reusable UI component library used across 5 internal projects to speed up development."
      }
    ]
  },

  kharrel: {
    name: "Kharrel",
    role: "Project Manager",
    img: "http://wordpresslaragon.test/wp-content/uploads/2026/11/kharrel.jpg",
    projects: [
      {
        title: "User Persona Development",
        date: "2024",
        desc: "Conducted 20+ user interviews and surveys to define key user personas for a new mobile application."
      },
      {
        title: "Usability Testing for Mobile App",
        date: "2023",
        desc: "Ran moderated usability testing sessions, identifying 15 critical UX bugs before the public launch."
      },
      {
        title: "Heuristic Evaluation Report",
        date: "2023",
        desc: "Performed a comprehensive heuristic evaluation of an existing internal tool, providing actionable recommendations."
      }
    ]
  },

  julie: {
    name: "Julie",
    role: "Technical Writer",
    img: "http://wordpresslaragon.test/wp-content/uploads/2026/11/julie.jpg",
    projects: [
      {
        title: "Brand Identity Design",
        date: "2024",
        desc: "Created a complete brand identity system including logo, typography, and color palette for a local coffee shop."
      },
      {
        title: "Mobile App UI Kit",
        date: "2023",
        desc: "Designed a comprehensive UI kit and design system in Figma for a cross-platform mobile app."
      },
      {
        title: "Marketing Campaign Assets",
        date: "2023",
        desc: "Designed high-converting social media graphics and banner ads for a digital marketing campaign."
      }
    ]
  }
};

function showPage(pageId) {
  document.querySelectorAll(".page-container").forEach(page => {
    page.classList.remove("active");
  });

  document.getElementById("page-" + pageId).classList.add("active");
  window.scrollTo(0, 0);
}

function goToSection(sectionId) {
  showPage("home");

  if (sectionId) {
    setTimeout(() => {
      const section = document.getElementById(sectionId);

      if (section) {
        section.scrollIntoView({
          behavior: "smooth"
        });
      }
    }, 50);
  } else {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  }
}

function showProject(memberKey) {
  const data = memberData[memberKey];

  document.getElementById("project-img").src = data.img;
  document.getElementById("project-name").textContent = data.name;
  document.getElementById("project-role").textContent = data.role;

  const projectList = document.getElementById("project-list");
  projectList.innerHTML = "";

  data.projects.forEach(project => {
    const card = document.createElement("div");

    card.className = "project-card";

    card.innerHTML = `
      <h3>${project.title}</h3>
      <span class="project-date">
        <i class="far fa-calendar-alt"></i> ${project.date}
      </span>
      <p>${project.desc}</p>
    `;

    projectList.appendChild(card);
  });

  showPage("project");
}

/* PROJECT SLIDER */

const projectSlides = [
  {
    name: "Charls",
    role: "Project Analyst",
    image: "http://wordpresslaragon.test/wp-content/uploads/2026/11/charls.jpg",
    description: "Strategy games & long-distance running.",
    tag: "♟️ Chess · 🏃 Running"
  },
  {
    name: "Jerwin",
    role: "Programmer",
    image: "http://wordpresslaragon.test/wp-content/uploads/2026/11/jerwin.jpg",
    description: "Film photography and urban sketching.",
    tag: "📷 Photography · ✏️ Sketching"
  },
  {
    name: "Kharrel",
    role: "Project Manager",
    image: "http://wordpresslaragon.test/wp-content/uploads/2026/11/kharrel.jpg",
    description: "Sci-fi novels and cooking experiments.",
    tag: "📚 Reading · 🍳 Cooking"
  },
  {
    name: "Julie",
    role: "Technical Writer",
    image: "http://wordpresslaragon.test/wp-content/uploads/2026/11/julie.jpg",
    description: "Vinyl collecting and gardening.",
    tag: "🎵 Vinyl · 🌱 Gardening"
  }
];

let currentSlide = 0;

function updateSlide() {
  const slide = projectSlides[currentSlide];

  document.getElementById("slide-image").src = slide.image;
  document.getElementById("slide-name").textContent = slide.name;
  document.getElementById("slide-role").textContent = slide.role;
  document.getElementById("slide-description").textContent = slide.description;
  document.getElementById("slide-tag").textContent = slide.tag;
  document.getElementById("slide-number").textContent =
    `0${currentSlide + 1} / 04`;

  document.querySelectorAll(".dot").forEach((dot, index) => {
    dot.classList.toggle("active", index === currentSlide);
  });

  const slideBox = document.querySelector(".project-slide");

  slideBox.style.animation = "none";
  slideBox.offsetHeight;
  slideBox.style.animation = "slideFade 0.5s ease";
}

function changeSlide(direction) {
  currentSlide += direction;

  if (currentSlide >= projectSlides.length) {
    currentSlide = 0;
  }

  if (currentSlide < 0) {
    currentSlide = projectSlides.length - 1;
  }

  updateSlide();
}

function goToSlide(index) {
  currentSlide = index;
  updateSlide();
}

setInterval(() => {
  changeSlide(1);
}, 3000);