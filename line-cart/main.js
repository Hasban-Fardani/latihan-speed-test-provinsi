const canvas = document.querySelector('canvas');
const ctx = canvas.getContext('2d');

// Chart data (replace with your actual data)
const data = {
  labels: ['1', '2', '3', '4', '5', '6', '7', '8'],
  values: [13, 20, 70, 41, 60, 20, 50, 30]
};

// Chart dimensions and paddings
const width = canvas.width;
const height = canvas.height;
const padding = 40;

let yMax = 0

// Function to calculate chart scales
function calculateScales() {
  yMax = Math.max(...data.values);
  const yScale = (height - 2 * padding) / yMax;
  const xScale = (width - 2 * padding) / (data.labels.length - 1);
  return { yScale, xScale };
}

// Function to draw the chart axes
function drawAxes(scales) {
  const { yScale, xScale } = scales;

  ctx.strokeStyle = 'black';
  ctx.beginPath();

  // Y-axis
  ctx.moveTo(padding, height - padding);
  ctx.lineTo(padding, padding);
  ctx.lineTo(padding + 5, padding);

  // X-axis
  ctx.moveTo(padding, height - padding);
  ctx.lineTo(width - padding, height - padding);
  ctx.lineTo(width - padding - 5, height - padding - 5);

  ctx.stroke();

  // Y-axis labels
  for (let i = 0; i <= 5; i++) {
    const y = height - padding - i * (yScale * yMax / 5);
    const value = Math.floor(yMax / 5 * (i + 1));
    ctx.fillText(value, padding - 15, y + 5);
  }

  // X-axis labels
  data.labels.forEach((label, index) => {
    const x = padding + xScale * index;
    ctx.fillText(label, x - 10, height - padding + 15);
  });

  ctx.closePath()
}

// Function to draw the data line
function drawLine(scales) {
  const { yScale, xScale } = scales;
  ctx.strokeStyle = 'red';
  ctx.beginPath();

  data.values.forEach((value, index) => {
    const x = padding + xScale * index;
    const y = height - padding - value * yScale;
    if (index === 0) ctx.moveTo(x, y);
    else ctx.lineTo(x, y);
  });

  ctx.stroke();
  ctx.closePath()
}

const scales = calculateScales();
drawAxes(scales);
drawLine(scales);
