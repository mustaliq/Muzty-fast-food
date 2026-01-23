function showForm(formId) {
    document.querySelectorAll(".form_boxx").forEach(form => form.classList.remove("active"));
    document.getElementById(formId).classList.add("active");
}