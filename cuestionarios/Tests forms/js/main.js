// Añadir un objeto de atributos a un elemento
const addAttributes = (element, attrObj) => {
  for (let attr in attrObj) {
    if (attrObj.hasOwnProperty(attr)) element.setAttribute(attr, attrObj[attr]);
  }
};

// Crear elementos con atributos e hijo
const createCustomElement = (element, attributes, children) => {
  let customElement = document.createElement(element);
  if (children !== undefined) children.forEach(el => {
    if (el.nodeType) {
      if (el.nodeType === 1 || el.nodeType === 11) customElement.appendChild(el);
    } else {
      customElement.innerHTML += el;
    }
  });
  addAttributes(customElement, attributes);
  return customElement;
};

// Imprimir modal
const printModal = content => {
  // crear contenedor interno
  const modalContentEl = createCustomElement('div', {
    id: 'ed-modal-content',
    class: 'ed-modal-content' },
  [content]),

  // crear contenedor principal
  modalContainerEl = createCustomElement('div', {
    id: 'ed-modal-container',
    class: 'ed-modal-container' },
  [modalContentEl]);

  // Imprimir el modal
  document.body.appendChild(modalContainerEl);

  // Remover el modal
  const removeModal = () => document.body.removeChild(modalContainerEl);

  modalContainerEl.addEventListener('click', e => {
    if (e.target === modalContainerEl) removeModal();
  });
};

const saludo = `<h1>Bienvenidos a EDteam en vivo</h1>`;
document.getElementById('show-modal').addEventListener('click', () => {
  printModal(saludo);
});
