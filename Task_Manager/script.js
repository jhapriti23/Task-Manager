let taskList = [
    "Complete project documentation",
  "Attend team meeting at 3 PM",
  "Reply to client's email",
  "Write blog post on AI productivity tools",
  "Review project proposal draft",
  "Fix bug in the login module",
  "Plan the sprint for next week",
  "Organize workspace and clean desk"
];
let suggestions = [
  "Try breaking your task into smaller chunks.",
  "Prioritize your tasks by urgency and importance.",
  "Focus on one task at a time for better productivity.",
  "Set specific deadlines for your tasks.",
  "Use the Pomodoro technique for time management."
];

function addTask() {
  const taskInput = document.getElementById("taskInput");
  const task = taskInput.value.trim();

  if (task) {
    taskList.push(task);
    taskInput.value = "";
    renderTaskList();
    provideSuggestions();
  }
}

function renderTaskList() {
  const taskListElement = document.getElementById("taskList");
  taskListElement.innerHTML = "";
  
  taskList.forEach((task, index) => {
    const li = document.createElement("li");
    li.textContent = task;
    taskListElement.appendChild(li);
  });
}

function provideSuggestions() {
  const suggestionsListElement = document.getElementById("suggestionsList");
  suggestionsListElement.innerHTML = "";
  
  suggestions.forEach((suggestion) => {
    const li = document.createElement("li");
    li.textContent = suggestion;
    suggestionsListElement.appendChild(li);
  });
}
        