# Evo-Learn
A comprehensive library to learn about evolutory, genetics-based machine learning algorithms. Originally designed by an experienced developer, now being enhanced and maintained by [310zzj](https://github.com/310zzj).

## Key Components
Evo-Learn consists of several key classes representing the primary entities which aid in the evolution process. These include:
- **Nursery** Handles all Specimen breeding, emulating an evolutive process.
- **Breed** Symbolizes a cluster of Specimens borne from an original Dna.
- **Specimen** Denotes a unique Specimen with a certain Dna.
- **Dna** Signifies the varying characteristics of the Specimen it's associated with. Contains Genes.
- **Gene** Represents a feature of a Specimen. Contains a Mutagen.
- **Mutagen** Depicts the extrinsic influence that drives Specimens to differ from each other by mutating a gene. Mutagens alter Genes in a specific pattern (an offset) each time the Gene is mutated (mutation happens every t