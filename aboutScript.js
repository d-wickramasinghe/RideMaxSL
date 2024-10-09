// Function to toggle the visibility of paragraphs
function toggleParagraph(paragraphId) {
    const paragraph = document.getElementById(paragraphId);
    if (paragraph.style.display === "none") {
        paragraph.style.display = "block";
    } else {
        paragraph.style.display = "none";
    }
}

// Function to dynamically update paragraph text
function updateParagraph(paragraphId, newText) {
    const paragraph = document.getElementById(paragraphId);
    paragraph.innerText = newText;
}

// Add event listeners for buttons to trigger paragraph changes
document.addEventListener('DOMContentLoaded', (event) => {
    document.getElementById('toggleMission').addEventListener('click', function() {
        toggleParagraph('missionPara');
    });

    document.getElementById('toggleWhyChoose').addEventListener('click', function() {
        toggleParagraph('whyChoosePara');
    });

    document.getElementById('updateMission').addEventListener('click', function() {
        updateParagraph('missionPara', 'Our mission is to provide the highest quality vehicle rental services while keeping customer satisfaction at the forefront.');
    });
});
