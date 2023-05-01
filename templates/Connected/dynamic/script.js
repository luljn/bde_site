
const form = document.getElementById("chat-form");

form.addEventListener("submit", (event) => {
  event.preventDefault();

  const name = document.getElementById("name").value;
  const message = document.getElementById("message").value;

  const messageDiv = document.createElement("div");
  messageDiv.classList.add("message");
  messageDiv.innerHTML = `<h3>${name}</h3><p>${message}</p>`;

  document.getElementById("chat-messages").appendChild(messageDiv);

  document.getElementById("message").value = "";
});