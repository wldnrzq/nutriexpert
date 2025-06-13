// Attach an event listener to the form
document.getElementById('food-form').addEventListener('submit', async function(event) {
    event.preventDefault(); // Prevent the form from submitting normally

    // Get form data
    const diet = document.getElementById('diet').value;
    const allergies = document.getElementById('allergies').value;
    const calories = document.getElementById('calories').value;

    // Create a form data object
    const formData = new FormData();
    formData.append('diet', diet);
    formData.append('allergies', allergies);
    formData.append('calories', calories);

    try {
        // Send data to the back-end using fetch
        const response = await fetch('recommend.php', {
            method: 'POST',
            body: formData
        });

        // Check if the response is ok
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }

        // Parse the JSON response
        const recommendations = await response.json();

        // Display the results
        const resultsDiv = document.getElementById('results');
        resultsDiv.innerHTML = '';

        if (recommendations.length > 0 && !recommendations["message"]) {
            recommendations.forEach(recipe => {
                const recipeDiv = document.createElement('div');
                recipeDiv.className = 'recipe';
                recipeDiv.innerHTML = `
                    <h3>${recipe.name}</h3>
                    <p><strong>Diet Type:</strong> ${recipe.diet_type}</p>
                    <p><strong>Calories:</strong> ${recipe.calories}</p>
                    <p><strong>Ingredients:</strong> ${recipe.ingredients}</p>
                `;
                resultsDiv.appendChild(recipeDiv);
            });
        } else {
            resultsDiv.innerHTML = '<p>No recommendations found based on your inputs.</p>';
        }

    } catch (error) {
        console.error('Error fetching recommendations:', error);
        document.getElementById('results').innerHTML = '<p>There was an error processing your request. Please try again later.</p>';
    }
});
