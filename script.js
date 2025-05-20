document.getElementById("story-form").addEventListener("submit", function(e) {
    e.preventDefault();
    let name = document.getElementById("name").value;
    let storyText = document.getElementById("story-text").value;

    let newStory = document.createElement("div");
    newStory.classList.add("story");
    newStory.innerHTML = `<h3>${name}</h3><p>${storyText}</p>`;

    document.getElementById("new-stories").appendChild(newStory);

    document.getElementById("name").value = "";
    document.getElementById("story-text").value = "";
});
