document.addEventListener('DOMContentLoaded', function() {
    // Animate the impact numbers with a simple counter
    const impactNumbers = document.querySelectorAll('.impact-number');
    
    impactNumbers.forEach(number => {
        const target = number.textContent;
        let start = 0;
        const duration = 2000; // ms
        const startTime = Date.now();
        
        const updateNumber = () => {
            const currentTime = Date.now();
            const elapsed = currentTime - startTime;
            
            if (elapsed < duration) {
                // If target contains K or + sign, handle differently
                if (target.includes('K')) {
                    const numValue = parseFloat(target);
                    const current = Math.floor((elapsed / duration) * numValue);
                    number.textContent = current + 'K+';
                } else if (target.includes('€')) {
                    const numValue = parseFloat(target.replace('€', ''));
                    const current = Math.floor((elapsed / duration) * numValue);
                    number.textContent = '€' + current + 'K';
                } else {
                    const numValue = parseFloat(target);
                    const current = Math.floor((elapsed / duration) * numValue);
                    number.textContent = current + '+';
                }
                
                requestAnimationFrame(updateNumber);
            } else {
                number.textContent = target;
            }
        };
        
        requestAnimationFrame(updateNumber);
    });

    // Newsletter form validation
    const newsletterForm = document.querySelector('.newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const emailInput = this.querySelector('input[type="email"]');
            if (emailInput.value.trim() !== '') {
                // In a real implementation, you would send this to your API
                console.log('Subscribing email:', emailInput.value);
                
                // Show success message
                const successMessage = document.createElement('p');
                successMessage.className = 'success-message';
                successMessage.textContent = 'Thank you for subscribing!';
                
                // Replace form with success message
                this.innerHTML = '';
                this.appendChild(successMessage);
            }
        });
    }
});