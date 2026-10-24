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
