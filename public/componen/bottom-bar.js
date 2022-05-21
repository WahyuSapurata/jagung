class BottomBar extends HTMLElement {
  static {
    customElements.define("bottom-bar", this);
  }
  // static get observedAttributes() {
  //     return []
  // }
  constructor() {
    super();
    this.attachShadow({
      mode: "open",
      delegatesFocus: "true",
      slotAssignment: "named",
    });
    const template = document.getElementById("bottom-bar");
    this.shadowRoot.replaceChildren(template.content.cloneNode(true));
    const view = matchMedia("(max-width: 986px)");
    if (view.matches) {
      this.style.display = "block";
    } else {
      this.style.display = "none";
    }
    view.addEventListener("change", () => {
      if (view.matches) {
        this.style.display = "block";
      } else {
        this.style.display = "none";
      }
    });
  }
  connectedCallback() {}
  disconnectedCallback() {}
  adoptedCallback() {}
  // attributeChangedCallback(name, oldValue, newValue) {

  // }
}
