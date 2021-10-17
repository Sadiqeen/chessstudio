const getRandomRGB = () => {
    const r = Math.floor(Math.random() * Math.floor(255));
    const g = Math.floor(Math.random() * Math.floor(255));
    const b = Math.floor(Math.random() * Math.floor(255));
    return `rgb(${r},${g},${b})`;
};

const colorPicker = document.getElementById('colorPicker');

for (let i = 0; i < 100; ++i) {
    const btn = document.createElement('button');
    const rgb = getRandomRGB();
    btn.id = rgb;
    btn.textContent = rgb;
    btn.style.backgroundColor = rgb;
    colorPicker.appendChild(btn);
    // Quiz: Write your answer below
    btn.addEventListener('click', () => {
        const ansBlock = document.getElementById('answerBox');
        ansBlock.style.backgroundColor = rgb;
    })
    // end
}
