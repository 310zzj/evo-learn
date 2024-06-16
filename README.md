# Evo-Learn
A comprehensive library to learn about evolutory, genetics-based machine learning algorithms. Originally designed by an experienced developer, now being enhanced and maintained by [310zzj](https://github.com/310zzj).

## Key Components
Evo-Learn consists of several key classes representing the primary entities which aid in the evolution process. These include:
- **Nursery** Handles all Specimen breeding, emulating an evolutive process.
- **Breed** Symbolizes a cluster of Specimens borne from an original Dna.
- **Specimen** Denotes a unique Specimen with a certain Dna.
- **Dna** Signifies the varying characteristics of the Specimen it's associated with. Contains Genes.
- **Gene** Represents a feature of a Specimen. Contains a Mutagen.
- **Mutagen** Depicts the extrinsic influence that drives Specimens to differ from each other by mutating a gene. Mutagens alter Genes in a specific pattern (an offset) each time the Gene is mutated (mutation happens every time a Specimen is bred). The simulated evolution procedure aims to keep Mutagens known to yield better fitness while mutating less fitted Mutagens.

## The Procedure
1. **The zero specimen** The starting point for breeding is set by creating a first specimen. 
2. **Generation breeding** Generations of specimens are bred one at a time, using the fittest Specimen from the prior generation as the base Specimen for the incoming one. For the first generation, the zero specimen serves as the base Specimen.
3. **Evolution at work** Each Specimen in a generation is a mutation from the generation's base Specimen. If the best fitted Specimen from a certain generation is less fitted than the preceding generation's, the entire generation is dismissed and bred again. This can occur only a specific maximum number of times.
4. **Mutagen** Mutagens mutate Genes in a specific way. When a Mutagen changes, the Gene will mutate in a randomly different way (to generate diversity). An unchanged Mutagen will mutate the Gene in the same way (to retain Mutagens believed to yield better fitted Specimens). Mutagens change for each new bred Specimen.

## Usage Guide
**Please refer to the full README in the repository for step-by-step guide on how to use the Evo-Learn library.**

## Concluding Remarks
Please note that evolutive genetic machine-learning algorithms like this are not best to find specific results. For instance, even with a very high number of iterations, you'll never reach a certainty of always obtaining a precise result. Yet, it's still possible to find significant or fun applications through these algorithms. For example, contemplat