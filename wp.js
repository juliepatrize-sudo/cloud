const memberData = {
  charls: {
  name: "Charls Sylwen L. Bernales",
  role: "Project Analyst",
  img: "http://wordpresslaragon.test/wp-content/uploads/2026/11/charls-Photoroom.png",

 facebook: "https://www.facebook.com/nishinoyayuu01",
  instagram: "https://www.instagram.com/sylwenniedapooh",
  email: "mailto:charlssylwenlimbaco@gmail.com",

  details: [
    {
      title: "About Me",
      desc: "Hi! I'm Charls Sylwen L. Bernales. I'm a funny and outgoing person who enjoys having fun, meeting people, and trying new experiences. I love learning new things and challenging myself to become a better person. I believe that life is not just about working hard but also about enjoying every moment and making good memories."
    },
    {
      title: "Hobbies & Interests",
      desc: "Gaming, watching movies, and playing football. These are some of the things I enjoy doing during my free time."
    },
    {
      title: "Personal Strengths",
      desc: "Patient, responsible, willing to learn, and competitive. I always try to stay focused, accept challenges, and give my best in everything I do."
    },
    {
      title: "Goals & Aspirations",
      desc: "My goal is to become a successful IT professional. I want to improve my technical skills, gain more knowledge and experience, and build a career that I can be proud of. I also want to make my family proud and achieve my dreams through hard work and determination."
    },
    {
      title: "Personal Motto",
      desc: "\"Pressure is a privilege.\" I believe that pressure and challenges are opportunities to grow, improve myself, and prove what I am capable of."
    }
  ]
},
  jerwin: {
    name: "Jerwin",
    role: "Programmer",
    img: "http://wordpresslaragon.test/wp-content/uploads/2026/11/jerwin.jpg",

  facebook: "https://www.facebook.com/jerwin.buray.3",
  instagram: "https://www.instagram.com/xenon_kiryu",
  email: "mailto:occ.edralin.juliepatrize@gmail.com",
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

  facebook: "https://www.facebook.com/kharrel.mugot",
  instagram: "https://www.instagram.com/k.jiyahn/",
  email: "mailto:occ.edralin.juliepatrize@gmail.com",

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
  name: "Julie Patrize Edralin",
  role: "Technical Writer",
  img: "http://wordpresslaragon.test/wp-content/uploads/2026/11/julie.jpg",

  facebook: "https://www.facebook.com/juliepatrize",
  instagram: "https://www.instagram.com/ptrize",
  email: "mailto:occ.edralin.juliepatrize@gmail.com",

  details: [
    {
      title: "About Me",
      desc: "Hi! I'm Julie Patrize Edralin. I'm a friendly and approachable person who enjoys connecting with others. I can also be shy and quiet at times, but I always try to be kind and respectful to the people around me. I enjoy learning new things and discovering experiences that help me grow."
    },
    {
      title: "Hobbies & Interests",
      desc: "I enjoy watching movies and reading books during my free time. These activities allow me to relax, explore different stories, and learn new perspectives."
    },
    {
      title: "Personal Strengths",
      desc: "I consider myself a willing learner, patient, and responsible person. I always try to understand things carefully, complete my tasks, and improve my skills whenever I have the opportunity."
    },
    {
      title: "Goals & Aspirations",
      desc: "My goals are to become financially independent and continue learning and improving myself. I want to gain more knowledge, develop my abilities, and build a better future through hard work and determination."
    },
    {
      title: "Personal Motto",
      desc: "\"Trust in the Lord with all your heart, and lean not on your own understanding.\" This reminds me to put my trust in God, especially when facing challenges and making difficult decisions. I believe that with faith, patience, and determination, everything will happen at the right time."
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

if (pageId === "home") {
    setActiveNav("home");
} else if (pageId === "project") {
    setActiveNav("about");
}
}


function goToSection(sectionId) {
  showPage("home");
if (sectionId) {
    setActiveNav(sectionId);
}

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

  // SOCIAL MEDIA
  const socials = document.getElementById("profile-socials");

  socials.innerHTML = `
    ${data.facebook ? `
      <a href="${data.facebook}" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-facebook-f"></i>
      </a>` : ''}

    ${data.instagram ? `
      <a href="${data.instagram}" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-instagram"></i>
      </a>` : ''}

    ${data.email ? `
      <a href="${data.email}">
        <i class="fas fa-envelope"></i>
      </a>` : ''}
  `;

  // PERSONAL DETAILS / PROJECTS
  const projectList = document.getElementById("project-list");
  projectList.innerHTML = "";

  const items = data.details || data.projects || [];

  items.forEach(item => {
    const card = document.createElement("div");
    card.className = "project-card";

    const title = document.createElement("h3");
    title.textContent = item.title;

    const desc = document.createElement("p");
    desc.textContent = item.desc;

    card.appendChild(title);

    if (item.date) {
      const date = document.createElement("span");
      date.className = "project-date";
      date.textContent = item.date;
      card.appendChild(date);
    }

    card.appendChild(desc);
    projectList.appendChild(card);
  });

  showPage("project");
}
 

const projectSlides = [
  {
    name: "Charls' Individual Project",
    role: "Individual Project",
    image: "http://wordpresslaragon.test/wp-content/uploads/2026/11/charls.jpg"
  },
  {
    name: "Jerwin's Individual Project",
    role: "Individual Project",
    image: "http://wordpresslaragon.test/wp-content/uploads/2026/11/jerwin.jpg"
  },
  {
    name: "Kharrel's Individual Project",
    role: "Individual Project",
    image: "http://wordpresslaragon.test/wp-content/uploads/2026/11/kharrel.jpg"
  },
  {
    name: "Julie's Individual Project",
    role: "Individual Project",
    image: "http://wordpresslaragon.test/wp-content/uploads/2026/11/julie.jpg"
  },
  {
    name: "Our Team Project",
    role: "Team Project · 4 Members",
    image: "http://wordpresslaragon.test/wp-content/uploads/2026/11/charls.jpg"
  }
];

let currentSlide = 0;

function updateSlide() {
  const slide = projectSlides[currentSlide];

  document.getElementById("slide-image").src = slide.image;
  document.getElementById("slide-name").textContent = slide.name;
  document.getElementById("slide-role").textContent = slide.role;

  document.getElementById("slide-number").textContent =
    `0${currentSlide + 1} / 05`;

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

/* NAVBAR ACTIVE UNDERLINE */

function setActiveNav(activePage) {
    document.querySelectorAll(".nav-links a").forEach(link => {
        link.classList.remove("active");
    });

    const links = document.querySelectorAll(".nav-links a");

    const navPages = ["home", "about", "project", "contact"];
    const index = navPages.indexOf(activePage);

    if (index !== -1) {
        links[index].classList.add("active");
    }
}

/* UPDATE ACTIVE LINK WHILE SCROLLING */

window.addEventListener("scroll", () => {
    const sections = ["about", "project", "contact"];

    let currentPage = "home";
    const scrollPosition = window.scrollY + 180;

    sections.forEach(sectionId => {
        const section = document.getElementById(sectionId);

        if (section && section.offsetTop <= scrollPosition) {
            currentPage = sectionId;
        }
    });

    if (document.getElementById("page-home").classList.contains("active")) {
        setActiveNav(currentPage);
    }
});