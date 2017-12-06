class WalkThrough {
    constructor(steps) {
        this.steps = [];

        this.steps = steps;
        this.currentStep = 0;
    }

    push(step) {
        this.steps.push(step);
    }

    get(index) {
        return this.steps[index];
    }

    current() {
        return this.steps[this.currentStep];
    }

    next() {
        this.currentStep = this.currentStep < ( this.steps.length-1 ) ? (this.currentStep + 1) : this.currentStep;
    }

    previous() {
        this.currentStep = this.currentStep > 0 ? (this.currentStep - 1) : this.currentStep;
    }

    reset() {
        this.currentStep = 0;
    }
}

export default WalkThrough;