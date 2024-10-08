document.addEventListener("DOMContentLoaded", function () {
    const faqItems = document.querySelectorAll(".faq-item");

    faqItems.forEach(item => {
        const question = item.querySelector(".faq-question");

        question.addEventListener("click", () => {
            const isOpen = item.classList.contains("open");
            item.classList.toggle("open", !isOpen);

            // Close other open items
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove("open");
                }
            });
        });
    });
});



function loadFAQs() {
    fetch('faq.php?action=read')
        .then(response => response.json())
        .then(data => {
            const faqList = document.getElementById('faqList');
            faqList.innerHTML = '';

            data.forEach(faq => {
                const faqItem = document.createElement('div');
                faqItem.classList.add('faq-item');
                faqItem.innerHTML = `
                    <p>${faq.question}</p>
                    <div class="faq-actions">
                        <button onclick="editFAQ(${faq.id}, '${faq.question}')">Edit</button>
                        <button onclick="deleteFAQ(${faq.id})">Delete</button>
                    </div>
                `;
                faqList.appendChild(faqItem);
            });
        });
}

function submitFAQ() {
    const id = document.getElementById('faqId').value;
    const question = document.getElementById('question').value;

    const action = id ? 'update' : 'create';
    const formData = new FormData();
    formData.append('id', id);
    formData.append('question', question);

    fetch(`faq.php?action=${action}`, {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('faqForm').reset();
        loadFAQs();
    });
}

function editFAQ(id, question) {
    document.getElementById('faqId').value = id;
    document.getElementById('question').value = question;
}

function deleteFAQ(id) {
    if (confirm('Are you sure you want to delete this question?')) {
        fetch(`faq.php?action=delete`, {
            method: 'POST',
            body: new URLSearchParams({ id })
        })
        .then(response => response.text())
        .then(data => {
            loadFAQs();
        });
    }
}

