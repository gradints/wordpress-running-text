// Mousemove
class FollowMouse {
  constructor(elementSelector) {
    this.element = document.querySelector(elementSelector);

    this.mouseX = 0;
    this.mouseY = 0;

    this.elementX = 0;
    this.elementY = 0;

    this.speed = 0.2;

    this._animate();
    this._listener();
  }

  _animate() {
    let distX = this.mouseX - this.elementX;
    let distY = this.mouseY - this.elementY;

    this.elementX = this.elementX + distX * this.speed;
    this.elementY = this.elementY + distY * this.speed;

    this.element.style.left = this.elementX + "px";
    this.element.style.top = this.elementY + "px";

    window.requestAnimationFrame(() => this._animate());
  }

  _listener() {
    const thisClass = this;
    document
      .querySelector(".move-container")
      .addEventListener("mousemove", function (event) {
        let offset = event.target.getBoundingClientRect();

        thisClass.mouseX = event.clientX - offset.left;
        thisClass.mouseY = event.clientY - offset.top;
      });

    document
      .querySelector(".move-container")
      .addEventListener("mouseout", function () {
        thisClass.element.style.opacity = 0;
      });

    document
      .querySelector(".move-container")
      .addEventListener("mouseover", function () {
        thisClass.element.style.opacity = 1;
      });
  }
}
new FollowMouse(".move-element");
