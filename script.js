const projectsGrid = document.querySelector(".projects-grid");
const projectDetails = document.getElementById("project-details");

function closeProject(full) {
    const short = document.getElementById(full.id.replace("_full", ""));
    projectDetails.append(full);
    if (short) {
        short.hidden = false;
    }
}

function openProject(short) {
    const full = document.getElementById(short.id + "_full");
    if (!full) {
        return;
    }
    // close the description that is currently open (if any)
    projectsGrid.querySelectorAll("[id$='_full']").forEach(closeProject);
    short.after(full);
    short.hidden = true;
    // smoothly bring the opened card title to the top of the screen
    full.scrollIntoView({ behavior: "smooth", block: "start" });
}

function handleProjectClick(event) {
    const card = event.target.closest(".project-card");
    if (!card) {
        return;
    }
    if (card.id.endsWith("_full")) {
        closeProject(card);
    } else {
        openProject(card);
    }
}

function handleProjectKeydown(event) {
    if (event.key === "Enter" || event.key === " ") {
        event.preventDefault();
        handleProjectClick(event);
    }
}

if (projectsGrid && projectDetails) {
    // make the cards reachable and usable with the keyboard
    document.querySelectorAll(".project-card").forEach(function (card) {
        card.setAttribute("tabindex", "0");
        card.setAttribute("role", "button");
    });
    projectsGrid.addEventListener("click", handleProjectClick);
    projectsGrid.addEventListener("keydown", handleProjectKeydown);
}

// ---------- Contact form ----------
const contactForm = document.getElementById("contact_form");
const formStatus = document.getElementById("form_status");

function showStatus(text, isError) {
    formStatus.textContent = text;
    formStatus.style.color = isError ? "#f14c4c" : "var(--green)";
    formStatus.hidden = false;
}

async function handleContactSubmit(event) {
    event.preventDefault();
    const submitButton = contactForm.querySelector("button[type='submit']");
    submitButton.disabled = true;
    showStatus("Sending...", false);

    try {
        const response = await fetch(contactForm.action, {
            method: "POST",
            body: new FormData(contactForm),
        });

        let data = {};
        try {
            data = await response.json();
        } catch (parseError) {
            data = {};
        }

        if (!response.ok) {
            throw new Error(data.error || data.detail || "Error " + response.status);
        }

        showStatus("Message sent, thank you!", false);
        contactForm.reset();
    } catch (error) {
        showStatus(error.message || "Network error, please try again.", true);
    } finally {
        submitButton.disabled = false;
    }
}

if (contactForm && formStatus) {
    contactForm.addEventListener("submit", handleContactSubmit);
}