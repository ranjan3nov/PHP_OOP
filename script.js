let numbers = [99, 1, 2, 3, 10, 20, 30];

// Log the initial array
console.log("Initial Array:", numbers);

// Sort the array and log at each step
numbers.sort((a, b) => {
    console.log(`Comparing ${a} and ${b}:`, numbers);
    return a - b;
});

// Log the final sorted array
console.log("Final Sorted Array:", numbers);