const calculate = (e) => {
    e.preventDefault();
    const height = parseFloat($("#heightBMI").val().replace(",", "."));
    const weight = parseFloat($("#weightBMI").val().replace(",", "."));
    const bmi =
        Math.round((weight / (height * height) + Number.EPSILON) * 100) / 100;

    console.log(height, weight, bmi);
    $("#resultBMI").text(bmi);
};

$(document).ready(() => {
    $("#calculateBMI").click(calculate);
});
