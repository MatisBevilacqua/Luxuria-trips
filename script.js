const duplicate = ['toto', 'bob', 'toto', 'jsp', 'toto', 'jsp']
const dedupe = []
const toSkip = []

for (let i = 0; i < duplicate.length; i++) {
  const el = duplicate[i];
  let skip = false;

  for (let j = 0; j < toSkip.length; j++) {
    if (toSkip[j] === i) {
      skip = true;
      break;
    }
  }

  if (skip) continue;

  for (let j = 0; j < duplicate.length; j++) {
    const el2 = duplicate[j];

    if (el === el2) {
      toSkip.push(j);
    }
  }

  toSkip.push(i)
  dedupe.push(el)
}

console.log(dedupe)
