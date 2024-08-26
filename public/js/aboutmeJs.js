document.querySelectorAll('.box').forEach(box => {
    const readMoreButton = box.querySelector('.read-more-btn');
    const readMoreText = box.querySelector('.read-more-text');

    readMoreButton.addEventListener('click', () => {
        const otherReadMoreTexts = document.querySelectorAll('.read-more-text--show');
        otherReadMoreTexts.forEach(text => {
            if (text !== readMoreText) {
                text.classList.remove('read-more-text--show');
                text.previousElementSibling.querySelector('.read-more-btn').textContent = 'Read More';
            }
        });

        readMoreText.classList.toggle('read-more-text--show');
        readMoreButton.textContent = readMoreText.classList.contains('read-more-text--show') ? 'Read Less' : 'Read More';
    });
});
